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

namespace MeineTransportApp
{
    public partial class Abfahrtstafel : Form
    {
        ITransport transport = new Transport();
    

        public Abfahrtstafel()
        {
            InitializeComponent();
        }

        //Abfuellen der Gefundenen Abfahrten in die Tabelle.
        private void btnSuchenTafel_Click(object sender, EventArgs e)
        {
            try
            {
                //Loeschen der vorhandenen Tabelle.
                dataGridViewabfahrt.Rows.Clear();

                //Erstellen der Variabel stationID
                var stationID = transport.GetStations(cbxAbfrageTafel.Text).StationList[0].Id;

                //Erstellen eine Variable mit allen GetStationBoard anforderungen.
                var verbindung = transport.GetStationBoard(cbxAbfrageTafel.Text, stationID, dtpDatum.Value.ToString("yyyy-MM-dd"), dtpZeit.Value.ToString("HH:mm"));



                //Abfuellen der DataGridView Verbindungen
                for (int i = 0; i < 10; i++)
                {

                    

                    dataGridViewabfahrt.Rows.Add(new string[]
                    {
                    verbindung.Entries[i].Stop.Departure.ToString(),        //Abfahrt
                    verbindung.Entries[i].To.ToString(),                    //Nach
                    verbindung.Entries[i].Operator.ToString(),              //Anbieter
                    verbindung.Entries[i].Category.ToString(),               //Kategorie
                    verbindung.Entries[i].Name.ToString()                   //Zug ID

                    });
                }
            }
            catch
            {
                MessageBox.Show("Keine Verbindung vorhanden. ");
            }
        }

        //Abfrage/Aktualisierung/Unterstuezung der ComboBox.
        private void cbxStationTafel_TextChanged(object sender, EventArgs e)
        {
            // -1 ist der index der auf das Eingabefeld der ComboBox verweisst.
            if (cbxAbfrageTafel.Text.Length > 0 && cbxAbfrageTafel.SelectedIndex == -1)
            {
                //Oeffnet DropDown der ComboBox und entsperrt den Button
                cbxAbfrageTafel.DroppedDown = true;
                btnSuchenTafel.Enabled = true;

                //Loescht die unterstuezungs eintraege.
                cbxAbfrageTafel.Items.Clear();

                //Liest die Laenge des Strings in de ComboBox aus und setzt den Courser an das ende.
                cbxAbfrageTafel.Select(cbxAbfrageTafel.Text.ToString().Length, 0);

                //Coursor wird auch über der ComboBox angezeigt
                Cursor.Current = Cursors.Default;

                //Aktualisieren des DropDown (ComboBox) Menues.
                try
                {
                    List<Station> abfahrtstafel = transport.GetStations(cbxAbfrageTafel.Text).StationList;


                    foreach (var x in abfahrtstafel)
                    {

                        if (abfahrtstafel != null)
                        {

                            cbxAbfrageTafel.Items.Add(x.Name);
                        }
                    }

                    if (cbxAbfrageTafel.Items.Count > 0)
                    {
                        cbxAbfrageTafel.DroppedDown = true;
                    }
                    else
                    {
                        cbxAbfrageTafel.DroppedDown = false;
                    }
                }
                catch
                {
                    Console.WriteLine("error", e);
                }               
            }                  
        }

        //Oeffnet das Forms  TransportApp und schliesst die Abfahrtstafel Seite.
        private void btnZurueck_Click(object sender, EventArgs e)
        {
            TransportApp verbindungSuchen = new TransportApp();
            this.Hide();
            verbindungSuchen.Show();
        }

        //Klappt das DroppedDown  der ComboBoxe zu wenn Enter gedrückt wird oder die ComboBox verlassen wird.
        private void cbxAbfrageTafel_EnterLeave(object sender, EventArgs e)
        {
            
            cbxAbfrageTafel.DroppedDown = false;
        }
    }
}
