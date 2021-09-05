namespace MeineTransportApp
{
    partial class Abfahrtstafel
    {
        /// <summary>
        /// Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        /// Required method for Designer support - do not modify
        /// the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            this.btnSuchenTafel = new System.Windows.Forms.Button();
            this.cbxAbfrageTafel = new System.Windows.Forms.ComboBox();
            this.dataGridViewabfahrt = new System.Windows.Forms.DataGridView();
            this.lblStationsort = new System.Windows.Forms.Label();
            this.btnZurueck = new System.Windows.Forms.Button();
            this.lblStation = new System.Windows.Forms.Label();
            this.lblZeit = new System.Windows.Forms.Label();
            this.lblDatum = new System.Windows.Forms.Label();
            this.dtpZeit = new System.Windows.Forms.DateTimePicker();
            this.dtpDatum = new System.Windows.Forms.DateTimePicker();
            this.dataGridViewTextBoxColumn1 = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.dataGridViewTextBoxColumn2 = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.dataGridViewTextBoxColumn3 = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.dataGridViewTextBoxColumn5 = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.VerbindungsID = new System.Windows.Forms.DataGridViewTextBoxColumn();
            ((System.ComponentModel.ISupportInitialize)(this.dataGridViewabfahrt)).BeginInit();
            this.SuspendLayout();
            // 
            // btnSuchenTafel
            // 
            this.btnSuchenTafel.Font = new System.Drawing.Font("Perpetua Titling MT", 16F);
            this.btnSuchenTafel.Location = new System.Drawing.Point(510, 162);
            this.btnSuchenTafel.Name = "btnSuchenTafel";
            this.btnSuchenTafel.Size = new System.Drawing.Size(169, 118);
            this.btnSuchenTafel.TabIndex = 4;
            this.btnSuchenTafel.Text = "Suchen";
            this.btnSuchenTafel.UseVisualStyleBackColor = true;
            this.btnSuchenTafel.Click += new System.EventHandler(this.btnSuchenTafel_Click);
            // 
            // cbxAbfrageTafel
            // 
            this.cbxAbfrageTafel.Font = new System.Drawing.Font("Perpetua Titling MT", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.cbxAbfrageTafel.FormattingEnabled = true;
            this.cbxAbfrageTafel.Location = new System.Drawing.Point(25, 162);
            this.cbxAbfrageTafel.Margin = new System.Windows.Forms.Padding(6);
            this.cbxAbfrageTafel.Name = "cbxAbfrageTafel";
            this.cbxAbfrageTafel.Size = new System.Drawing.Size(446, 30);
            this.cbxAbfrageTafel.TabIndex = 1;
            this.cbxAbfrageTafel.TextChanged += new System.EventHandler(this.cbxStationTafel_TextChanged);
            this.cbxAbfrageTafel.Enter += new System.EventHandler(this.cbxAbfrageTafel_EnterLeave);
            this.cbxAbfrageTafel.Leave += new System.EventHandler(this.cbxAbfrageTafel_EnterLeave);
            // 
            // dataGridViewabfahrt
            // 
            this.dataGridViewabfahrt.AllowUserToAddRows = false;
            this.dataGridViewabfahrt.AllowUserToDeleteRows = false;
            this.dataGridViewabfahrt.AllowUserToOrderColumns = true;
            this.dataGridViewabfahrt.AllowUserToResizeColumns = false;
            this.dataGridViewabfahrt.AllowUserToResizeRows = false;
            this.dataGridViewabfahrt.BackgroundColor = System.Drawing.SystemColors.GradientActiveCaption;
            this.dataGridViewabfahrt.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dataGridViewabfahrt.Columns.AddRange(new System.Windows.Forms.DataGridViewColumn[] {
            this.dataGridViewTextBoxColumn1,
            this.dataGridViewTextBoxColumn2,
            this.dataGridViewTextBoxColumn3,
            this.dataGridViewTextBoxColumn5,
            this.VerbindungsID});
            this.dataGridViewabfahrt.Location = new System.Drawing.Point(25, 309);
            this.dataGridViewabfahrt.Margin = new System.Windows.Forms.Padding(6);
            this.dataGridViewabfahrt.Name = "dataGridViewabfahrt";
            this.dataGridViewabfahrt.RowHeadersWidth = 51;
            this.dataGridViewabfahrt.RowTemplate.Height = 24;
            this.dataGridViewabfahrt.Size = new System.Drawing.Size(654, 283);
            this.dataGridViewabfahrt.TabIndex = 55;
            this.dataGridViewabfahrt.TabStop = false;
            // 
            // lblStationsort
            // 
            this.lblStationsort.AutoSize = true;
            this.lblStationsort.Font = new System.Drawing.Font("Perpetua Titling MT", 27.75F);
            this.lblStationsort.Location = new System.Drawing.Point(160, 23);
            this.lblStationsort.Name = "lblStationsort";
            this.lblStationsort.Size = new System.Drawing.Size(283, 44);
            this.lblStationsort.TabIndex = 22;
            this.lblStationsort.Text = "Stationsort";
            // 
            // btnZurueck
            // 
            this.btnZurueck.Font = new System.Drawing.Font("Perpetua Titling MT", 16F);
            this.btnZurueck.ForeColor = System.Drawing.SystemColors.InactiveCaptionText;
            this.btnZurueck.Location = new System.Drawing.Point(510, 12);
            this.btnZurueck.Name = "btnZurueck";
            this.btnZurueck.Size = new System.Drawing.Size(169, 79);
            this.btnZurueck.TabIndex = 5;
            this.btnZurueck.Text = "Zurück";
            this.btnZurueck.UseVisualStyleBackColor = true;
            this.btnZurueck.Click += new System.EventHandler(this.btnZurueck_Click);
            // 
            // lblStation
            // 
            this.lblStation.AutoSize = true;
            this.lblStation.Font = new System.Drawing.Font("Perpetua", 18F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblStation.Location = new System.Drawing.Point(20, 128);
            this.lblStation.Name = "lblStation";
            this.lblStation.Size = new System.Drawing.Size(80, 28);
            this.lblStation.TabIndex = 28;
            this.lblStation.Text = "Station:";
            // 
            // lblZeit
            // 
            this.lblZeit.AutoSize = true;
            this.lblZeit.Font = new System.Drawing.Font("Perpetua", 18F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblZeit.Location = new System.Drawing.Point(246, 229);
            this.lblZeit.Name = "lblZeit";
            this.lblZeit.Size = new System.Drawing.Size(56, 28);
            this.lblZeit.TabIndex = 32;
            this.lblZeit.Text = "Zeit:";
            // 
            // lblDatum
            // 
            this.lblDatum.AutoSize = true;
            this.lblDatum.Font = new System.Drawing.Font("Perpetua", 18F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblDatum.Location = new System.Drawing.Point(20, 228);
            this.lblDatum.Name = "lblDatum";
            this.lblDatum.Size = new System.Drawing.Size(79, 28);
            this.lblDatum.TabIndex = 31;
            this.lblDatum.Text = "Datum:";
            // 
            // dtpZeit
            // 
            this.dtpZeit.CustomFormat = "HH:mm";
            this.dtpZeit.Format = System.Windows.Forms.DateTimePickerFormat.Custom;
            this.dtpZeit.Location = new System.Drawing.Point(251, 260);
            this.dtpZeit.Name = "dtpZeit";
            this.dtpZeit.ShowUpDown = true;
            this.dtpZeit.Size = new System.Drawing.Size(220, 20);
            this.dtpZeit.TabIndex = 3;
            // 
            // dtpDatum
            // 
            this.dtpDatum.Location = new System.Drawing.Point(25, 259);
            this.dtpDatum.Name = "dtpDatum";
            this.dtpDatum.Size = new System.Drawing.Size(220, 20);
            this.dtpDatum.TabIndex = 2;
            // 
            // dataGridViewTextBoxColumn1
            // 
            this.dataGridViewTextBoxColumn1.HeaderText = "Abfahrt";
            this.dataGridViewTextBoxColumn1.MinimumWidth = 6;
            this.dataGridViewTextBoxColumn1.Name = "dataGridViewTextBoxColumn1";
            this.dataGridViewTextBoxColumn1.Width = 125;
            // 
            // dataGridViewTextBoxColumn2
            // 
            this.dataGridViewTextBoxColumn2.HeaderText = "Nach";
            this.dataGridViewTextBoxColumn2.MinimumWidth = 6;
            this.dataGridViewTextBoxColumn2.Name = "dataGridViewTextBoxColumn2";
            this.dataGridViewTextBoxColumn2.Width = 125;
            // 
            // dataGridViewTextBoxColumn3
            // 
            this.dataGridViewTextBoxColumn3.HeaderText = "Anbieter";
            this.dataGridViewTextBoxColumn3.MinimumWidth = 6;
            this.dataGridViewTextBoxColumn3.Name = "dataGridViewTextBoxColumn3";
            this.dataGridViewTextBoxColumn3.Width = 125;
            // 
            // dataGridViewTextBoxColumn5
            // 
            this.dataGridViewTextBoxColumn5.HeaderText = "Kategorie";
            this.dataGridViewTextBoxColumn5.Name = "dataGridViewTextBoxColumn5";
            this.dataGridViewTextBoxColumn5.ReadOnly = true;
            // 
            // VerbindungsID
            // 
            this.VerbindungsID.HeaderText = "ID";
            this.VerbindungsID.Name = "VerbindungsID";
            this.VerbindungsID.ReadOnly = true;
            // 
            // Abfahrtstafel
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(713, 607);
            this.Controls.Add(this.lblZeit);
            this.Controls.Add(this.lblDatum);
            this.Controls.Add(this.dtpZeit);
            this.Controls.Add(this.dtpDatum);
            this.Controls.Add(this.lblStation);
            this.Controls.Add(this.btnZurueck);
            this.Controls.Add(this.lblStationsort);
            this.Controls.Add(this.dataGridViewabfahrt);
            this.Controls.Add(this.cbxAbfrageTafel);
            this.Controls.Add(this.btnSuchenTafel);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedSingle;
            this.MaximizeBox = false;
            this.MinimizeBox = false;
            this.Name = "Abfahrtstafel";
            this.Text = "Abfahrtstafel";
            ((System.ComponentModel.ISupportInitialize)(this.dataGridViewabfahrt)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button btnSuchenTafel;
        private System.Windows.Forms.ComboBox cbxAbfrageTafel;
        private System.Windows.Forms.DataGridView dataGridViewabfahrt;
        private System.Windows.Forms.Label lblStationsort;
        private System.Windows.Forms.Button btnZurueck;
        private System.Windows.Forms.Label lblStation;
        private System.Windows.Forms.Label lblZeit;
        private System.Windows.Forms.Label lblDatum;
        private System.Windows.Forms.DateTimePicker dtpZeit;
        private System.Windows.Forms.DateTimePicker dtpDatum;
        private System.Windows.Forms.DataGridViewTextBoxColumn dataGridViewTextBoxColumn1;
        private System.Windows.Forms.DataGridViewTextBoxColumn dataGridViewTextBoxColumn2;
        private System.Windows.Forms.DataGridViewTextBoxColumn dataGridViewTextBoxColumn3;
        private System.Windows.Forms.DataGridViewTextBoxColumn dataGridViewTextBoxColumn5;
        private System.Windows.Forms.DataGridViewTextBoxColumn VerbindungsID;
    }
}