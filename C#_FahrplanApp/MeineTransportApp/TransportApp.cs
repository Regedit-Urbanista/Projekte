using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

using SwissTransport.Core;
using SwissTransport.Models;

using System.IO;
using System.Net;




namespace MeineTransportApp
{
    public partial class TransportApp : Form
    {    
        ITransport transport = new Transport();


        public TransportApp()
        {
            InitializeComponent();
        }
       
        //Abfuellen der Gefundenen Verbindungen in die Tabelle.
        private void btnSuchen_Click(object sender, EventArgs e)
        {
            if(cbxVon.Text.Length > 0)
            {
                if(cbxNach.Text.Length > 0)
                {

                
           
                //Loeschen der vorhandenen Tabelle.
                dgvVerbindungen.Rows.Clear();


                    //Erstellen einer Liste mit allen GetConnections anforderungen.
                    List<Connection> verbindungen = transport.GetConnections(cbxVon.Text, cbxNach.Text, dtpDatum.Value.ToString("yyyy-MM-dd"),dtpZeit.Value.ToString("HH:mm")).ConnectionList;


                    //Abfuellen der DataGridView Verbindungen
                    for (int i = 0; i < 4; i++)
                    {
                        if(verbindungen[i].Product[0] == null )
                        {
                            verbindungen[i].Product[0] = "";
                  
                        }

                        if(verbindungen[i].From.Platform == null)
                        {
                            verbindungen[i].From.Platform = "";
                        }

                            dgvVerbindungen.Rows.Add(new[]
                        {
                            verbindungen[i].Product[0],                                     //Zug Linie
                            verbindungen[i].From.Departure.Value.ToString(),                //Abfahrt
                            verbindungen[i].Duration.Replace("00d",""),                     //Dauer
                            verbindungen[i].From.Platform.ToString(),                      //Gleis
                            verbindungen[i].To.Arrival.Value.ToString("HH:mm:ss"),         //Ankunft
                            verbindungen[i].To.Delay.ToString()                             //Hinweis
                 
                        });
                    }
                }
                else
                {
                    Console.WriteLine("error", e);
                }

            }
            else
            {
                Console.WriteLine("error", e);
            }

        }

        //Abfrage/Aktualisierung/Unterstuezung der ComboBox Von.
        private void cbxVon_TextChanged(object sender, EventArgs e)
        {
            // -1 = in dem Textfeld der Combobox
            if (cbxVon.Text.Length > 0 && cbxVon.SelectedIndex == -1)
            {
                //Oeffnet DropDown der ComboBox und entsperrt den Button
                cbxVon.DroppedDown = true;
                cbxVon.Enabled = true;

                //Loescht die unterstuezungs eintraege.
                cbxVon.Items.Clear();

                //Liest die Laenge des Strings in de ComboBox aus und setzt den Courser an das ende.
                cbxVon.Select(cbxVon.Text.ToString().Length, 0);

                //Coursor wird auch über der ComboBox angezeigt
                Cursor.Current = Cursors.Default;

                //Aktualisieren des DropDown (ComboBox) Menues.
                try
                {     
                    List<Station> abfahrtstafel = transport.GetStations(cbxVon.Text).StationList;

                    foreach (var x in abfahrtstafel)
                    {

                        if (abfahrtstafel != null)
                        {

                            cbxVon.Items.Add(x.Name);
                        }
                    }

                    if (cbxVon.Items.Count > 0)
                    {
                        cbxVon.DroppedDown = true;
                    }
                    else
                    {
                        cbxVon.DroppedDown = false;
                    }
                }
                catch
                {
                    Console.WriteLine("error", e);
                }
            }
        }
        
        //Abfrage/Aktualisierung/Unterstuezung der ComboBox Nach.
        private void cbxNach_TextChanged(object sender, EventArgs e)
        {
                // -1  verweisst auf das Textfeld der Combobox.
            if (cbxNach.Text.Length > 0 && cbxNach.SelectedIndex == -1)
            {
                //Oeffnet DropDown der ComboBox und entsperrt den Button
                cbxNach.DroppedDown = true;
                cbxNach.Enabled = true;

                //Loescht die unterstuezungs eintraege.
                cbxNach.Items.Clear();

                //Liest die Laenge des Strings in de ComboBox aus und setzt den Courser an das ende.
                cbxNach.Select(cbxNach.Text.ToString().Length, 0);

                //Coursor wird auch über der ComboBox angezeigt
                Cursor.Current = Cursors.Default;

                //Aktualisieren des DropDown (ComboBox) Menues.
                try
                {
                    List<Station> abfahrtstafel = transport.GetStations(cbxNach.Text).StationList;


                    foreach (var x in abfahrtstafel)
                    {

                        if (abfahrtstafel != null)
                        {

                            cbxNach.Items.Add(x.Name);
                        }
                    }

                    if (cbxNach.Items.Count > 0)
                    {
                        cbxNach.DroppedDown = true;
                    }
                    else
                    {
                        cbxNach.DroppedDown = false;
                    }
                }
                catch
                {
                    Console.WriteLine("error", e);
                }
            }
        }

        //Klappt das DroppedDown der beiden ComboBoxen zu wenn Enter gedrückt wird oder die ComboBox verlassen wird.
        private void cbxVonNach_EnterLeave(object sender, EventArgs e)
        {
            cbxVon.DroppedDown = false;
            cbxNach.DroppedDown = false;
        }

        //Oeffnet das Forms Abfahrtstafel und schliesst die TransportApp Seite.
        private void btnAbfahrtstafel_Click(object sender, EventArgs e)
        {
            Abfahrtstafel abfahrtstafel = new Abfahrtstafel();
            this.Hide();
            abfahrtstafel.Show();
        }

        //Wechselt die Inhalte der ComboBoxen
        private void btnWechseln_Click(object sender, EventArgs e)
        {
            string vonNeuNach = cbxVon.Text;
            string nachNeuVon = cbxNach.Text;

            cbxVon.Text = nachNeuVon;
            cbxNach.Text = vonNeuNach;
        }
    }
}
