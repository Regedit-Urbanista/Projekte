namespace MeineTransportApp
{
    partial class TransportApp
    {
        /// <summary>
        /// Erforderliche Designervariable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        /// Verwendete Ressourcen bereinigen.
        /// </summary>
        /// <param name="disposing">True, wenn verwaltete Ressourcen gelöscht werden sollen; andernfalls False.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Vom Windows Form-Designer generierter Code

        /// <summary>
        /// Erforderliche Methode für die Designerunterstützung.
        /// Der Inhalt der Methode darf nicht mit dem Code-Editor geändert werden.
        /// </summary>
        private void InitializeComponent()
        {
            this.btnSuchen = new System.Windows.Forms.Button();
            this.dtpDatum = new System.Windows.Forms.DateTimePicker();
            this.dtpZeit = new System.Windows.Forms.DateTimePicker();
            this.dgvVerbindungen = new System.Windows.Forms.DataGridView();
            this.cbxVon = new System.Windows.Forms.ComboBox();
            this.cbxNach = new System.Windows.Forms.ComboBox();
            this.btnAbfahrtstafel = new System.Windows.Forms.Button();
            this.lblVerbindungenSuchen = new System.Windows.Forms.Label();
            this.lblVon = new System.Windows.Forms.Label();
            this.lblNach = new System.Windows.Forms.Label();
            this.lblDatum = new System.Windows.Forms.Label();
            this.lblZeit = new System.Windows.Forms.Label();
            this.btnWechseln = new System.Windows.Forms.Button();
            this.Linie = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.abfahrt1 = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.dauer = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.gleis = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.ankunft1 = new System.Windows.Forms.DataGridViewTextBoxColumn();
            this.hinweis = new System.Windows.Forms.DataGridViewTextBoxColumn();
            ((System.ComponentModel.ISupportInitialize)(this.dgvVerbindungen)).BeginInit();
            this.SuspendLayout();
            // 
            // btnSuchen
            // 
            this.btnSuchen.Font = new System.Drawing.Font("Perpetua Titling MT", 16F);
            this.btnSuchen.Location = new System.Drawing.Point(757, 156);
            this.btnSuchen.Name = "btnSuchen";
            this.btnSuchen.Size = new System.Drawing.Size(257, 111);
            this.btnSuchen.TabIndex = 5;
            this.btnSuchen.Text = "Suchen";
            this.btnSuchen.UseVisualStyleBackColor = true;
            this.btnSuchen.Click += new System.EventHandler(this.btnSuchen_Click);
            // 
            // dtpDatum
            // 
            this.dtpDatum.Location = new System.Drawing.Point(74, 247);
            this.dtpDatum.Name = "dtpDatum";
            this.dtpDatum.Size = new System.Drawing.Size(281, 20);
            this.dtpDatum.TabIndex = 3;
            // 
            // dtpZeit
            // 
            this.dtpZeit.CustomFormat = "HH:mm";
            this.dtpZeit.Format = System.Windows.Forms.DateTimePickerFormat.Custom;
            this.dtpZeit.Location = new System.Drawing.Point(470, 247);
            this.dtpZeit.Name = "dtpZeit";
            this.dtpZeit.ShowUpDown = true;
            this.dtpZeit.Size = new System.Drawing.Size(281, 20);
            this.dtpZeit.TabIndex = 4;
            // 
            // dgvVerbindungen
            // 
            this.dgvVerbindungen.AllowUserToAddRows = false;
            this.dgvVerbindungen.AllowUserToDeleteRows = false;
            this.dgvVerbindungen.AllowUserToOrderColumns = true;
            this.dgvVerbindungen.AllowUserToResizeColumns = false;
            this.dgvVerbindungen.AllowUserToResizeRows = false;
            this.dgvVerbindungen.Anchor = System.Windows.Forms.AnchorStyles.None;
            this.dgvVerbindungen.BackgroundColor = System.Drawing.SystemColors.GradientActiveCaption;
            this.dgvVerbindungen.ColumnHeadersHeightSizeMode = System.Windows.Forms.DataGridViewColumnHeadersHeightSizeMode.AutoSize;
            this.dgvVerbindungen.Columns.AddRange(new System.Windows.Forms.DataGridViewColumn[] {
            this.Linie,
            this.abfahrt1,
            this.dauer,
            this.gleis,
            this.ankunft1,
            this.hinweis});
            this.dgvVerbindungen.Location = new System.Drawing.Point(74, 307);
            this.dgvVerbindungen.Margin = new System.Windows.Forms.Padding(1);
            this.dgvVerbindungen.Name = "dgvVerbindungen";
            this.dgvVerbindungen.RowHeadersWidth = 51;
            this.dgvVerbindungen.RowTemplate.Height = 24;
            this.dgvVerbindungen.Size = new System.Drawing.Size(940, 189);
            this.dgvVerbindungen.TabIndex = 55;
            this.dgvVerbindungen.TabStop = false;
            // 
            // cbxVon
            // 
            this.cbxVon.Font = new System.Drawing.Font("Perpetua Titling MT", 14.25F);
            this.cbxVon.FormattingEnabled = true;
            this.cbxVon.Location = new System.Drawing.Point(74, 156);
            this.cbxVon.Margin = new System.Windows.Forms.Padding(1);
            this.cbxVon.Name = "cbxVon";
            this.cbxVon.Size = new System.Drawing.Size(286, 30);
            this.cbxVon.TabIndex = 1;
            this.cbxVon.TextChanged += new System.EventHandler(this.cbxVon_TextChanged);
            this.cbxVon.Enter += new System.EventHandler(this.cbxVonNach_EnterLeave);
            this.cbxVon.Leave += new System.EventHandler(this.cbxVonNach_EnterLeave);
            // 
            // cbxNach
            // 
            this.cbxNach.Font = new System.Drawing.Font("Perpetua Titling MT", 14.25F);
            this.cbxNach.FormattingEnabled = true;
            this.cbxNach.Location = new System.Drawing.Point(470, 156);
            this.cbxNach.Margin = new System.Windows.Forms.Padding(1);
            this.cbxNach.Name = "cbxNach";
            this.cbxNach.Size = new System.Drawing.Size(283, 30);
            this.cbxNach.TabIndex = 2;
            this.cbxNach.TextChanged += new System.EventHandler(this.cbxNach_TextChanged);
            this.cbxNach.Enter += new System.EventHandler(this.cbxVonNach_EnterLeave);
            this.cbxNach.Leave += new System.EventHandler(this.cbxVonNach_EnterLeave);
            // 
            // btnAbfahrtstafel
            // 
            this.btnAbfahrtstafel.Font = new System.Drawing.Font("Perpetua Titling MT", 14.25F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.btnAbfahrtstafel.Location = new System.Drawing.Point(757, 21);
            this.btnAbfahrtstafel.Name = "btnAbfahrtstafel";
            this.btnAbfahrtstafel.Size = new System.Drawing.Size(257, 53);
            this.btnAbfahrtstafel.TabIndex = 7;
            this.btnAbfahrtstafel.Text = "Abfahrtstafel";
            this.btnAbfahrtstafel.UseVisualStyleBackColor = true;
            this.btnAbfahrtstafel.Click += new System.EventHandler(this.btnAbfahrtstafel_Click);
            // 
            // lblVerbindungenSuchen
            // 
            this.lblVerbindungenSuchen.AutoSize = true;
            this.lblVerbindungenSuchen.Font = new System.Drawing.Font("Perpetua Titling MT", 27.75F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblVerbindungenSuchen.Location = new System.Drawing.Point(72, 21);
            this.lblVerbindungenSuchen.Name = "lblVerbindungenSuchen";
            this.lblVerbindungenSuchen.Size = new System.Drawing.Size(479, 44);
            this.lblVerbindungenSuchen.TabIndex = 23;
            this.lblVerbindungenSuchen.Text = "Verbindungen Suchen";
            // 
            // lblVon
            // 
            this.lblVon.AutoSize = true;
            this.lblVon.Font = new System.Drawing.Font("Perpetua", 18F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblVon.Location = new System.Drawing.Point(75, 126);
            this.lblVon.Name = "lblVon";
            this.lblVon.Size = new System.Drawing.Size(55, 28);
            this.lblVon.TabIndex = 24;
            this.lblVon.Text = "Von:";
            // 
            // lblNach
            // 
            this.lblNach.AutoSize = true;
            this.lblNach.Font = new System.Drawing.Font("Perpetua", 18F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblNach.Location = new System.Drawing.Point(465, 126);
            this.lblNach.Name = "lblNach";
            this.lblNach.Size = new System.Drawing.Size(64, 28);
            this.lblNach.TabIndex = 25;
            this.lblNach.Text = "Nach:";
            // 
            // lblDatum
            // 
            this.lblDatum.AutoSize = true;
            this.lblDatum.Font = new System.Drawing.Font("Perpetua", 18F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblDatum.Location = new System.Drawing.Point(69, 216);
            this.lblDatum.Name = "lblDatum";
            this.lblDatum.Size = new System.Drawing.Size(79, 28);
            this.lblDatum.TabIndex = 26;
            this.lblDatum.Text = "Datum:";
            // 
            // lblZeit
            // 
            this.lblZeit.AutoSize = true;
            this.lblZeit.Font = new System.Drawing.Font("Perpetua", 18F, System.Drawing.FontStyle.Regular, System.Drawing.GraphicsUnit.Point, ((byte)(0)));
            this.lblZeit.Location = new System.Drawing.Point(465, 216);
            this.lblZeit.Name = "lblZeit";
            this.lblZeit.Size = new System.Drawing.Size(56, 28);
            this.lblZeit.TabIndex = 27;
            this.lblZeit.Text = "Zeit:";
            // 
            // btnWechseln
            // 
            this.btnWechseln.Font = new System.Drawing.Font("Perpetua Titling MT", 12F);
            this.btnWechseln.Location = new System.Drawing.Point(364, 154);
            this.btnWechseln.Name = "btnWechseln";
            this.btnWechseln.Size = new System.Drawing.Size(102, 35);
            this.btnWechseln.TabIndex = 6;
            this.btnWechseln.Text = "Wechseln";
            this.btnWechseln.UseVisualStyleBackColor = true;
            this.btnWechseln.Click += new System.EventHandler(this.btnWechseln_Click);
            // 
            // Linie
            // 
            this.Linie.HeaderText = "Linie";
            this.Linie.Name = "Linie";
            this.Linie.ReadOnly = true;
            // 
            // abfahrt1
            // 
            this.abfahrt1.HeaderText = "Abfahrt";
            this.abfahrt1.MinimumWidth = 6;
            this.abfahrt1.Name = "abfahrt1";
            this.abfahrt1.Width = 125;
            // 
            // dauer
            // 
            this.dauer.HeaderText = "Dauer";
            this.dauer.MinimumWidth = 6;
            this.dauer.Name = "dauer";
            this.dauer.Width = 125;
            // 
            // gleis
            // 
            this.gleis.HeaderText = "Gleis / Haltestelle";
            this.gleis.MinimumWidth = 6;
            this.gleis.Name = "gleis";
            this.gleis.Width = 125;
            // 
            // ankunft1
            // 
            this.ankunft1.HeaderText = "Ankunft";
            this.ankunft1.MinimumWidth = 6;
            this.ankunft1.Name = "ankunft1";
            this.ankunft1.Width = 125;
            // 
            // hinweis
            // 
            this.hinweis.HeaderText = "Hinweis";
            this.hinweis.MinimumWidth = 6;
            this.hinweis.Name = "hinweis";
            this.hinweis.Width = 125;
            // 
            // TransportApp
            // 
            this.AutoScaleDimensions = new System.Drawing.SizeF(6F, 13F);
            this.AutoScaleMode = System.Windows.Forms.AutoScaleMode.Font;
            this.ClientSize = new System.Drawing.Size(1220, 587);
            this.Controls.Add(this.btnWechseln);
            this.Controls.Add(this.lblZeit);
            this.Controls.Add(this.lblDatum);
            this.Controls.Add(this.lblNach);
            this.Controls.Add(this.lblVon);
            this.Controls.Add(this.lblVerbindungenSuchen);
            this.Controls.Add(this.btnAbfahrtstafel);
            this.Controls.Add(this.cbxNach);
            this.Controls.Add(this.cbxVon);
            this.Controls.Add(this.dgvVerbindungen);
            this.Controls.Add(this.dtpZeit);
            this.Controls.Add(this.dtpDatum);
            this.Controls.Add(this.btnSuchen);
            this.FormBorderStyle = System.Windows.Forms.FormBorderStyle.FixedSingle;
            this.MaximizeBox = false;
            this.MinimizeBox = false;
            this.Name = "TransportApp";
            this.Text = "Transport App";
            ((System.ComponentModel.ISupportInitialize)(this.dgvVerbindungen)).EndInit();
            this.ResumeLayout(false);
            this.PerformLayout();

        }

        #endregion

        private System.Windows.Forms.Button btnSuchen;
        private System.Windows.Forms.DateTimePicker dtpDatum;
        private System.Windows.Forms.DateTimePicker dtpZeit;
        private System.Windows.Forms.DataGridView dgvVerbindungen;
        private System.Windows.Forms.ComboBox cbxVon;
        private System.Windows.Forms.ComboBox cbxNach;
        private System.Windows.Forms.Button btnAbfahrtstafel;
        private System.Windows.Forms.Label lblVerbindungenSuchen;
        private System.Windows.Forms.Label lblVon;
        private System.Windows.Forms.Label lblNach;
        private System.Windows.Forms.Label lblDatum;
        private System.Windows.Forms.Label lblZeit;
        private System.Windows.Forms.Button btnWechseln;
        private System.Windows.Forms.DataGridViewTextBoxColumn Linie;
        private System.Windows.Forms.DataGridViewTextBoxColumn abfahrt1;
        private System.Windows.Forms.DataGridViewTextBoxColumn dauer;
        private System.Windows.Forms.DataGridViewTextBoxColumn gleis;
        private System.Windows.Forms.DataGridViewTextBoxColumn ankunft1;
        private System.Windows.Forms.DataGridViewTextBoxColumn hinweis;
    }
}

