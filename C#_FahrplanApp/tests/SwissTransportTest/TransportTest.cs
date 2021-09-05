namespace SwissTransport
{
    using Microsoft.VisualStudio.TestTools.UnitTesting;

    using SwissTransport.Core;

    /// <summary>
    /// The Swiss Transport API tests.
    /// </summary>
    [TestClass]
    public class TransportTest
    {
        private ITransport testee;

        [TestMethod]
        public void Locations()
        {
            testee = new Transport();
            var stations = this.testee.GetStations("Sursee,");

            Assert.AreEqual(10, stations.StationList.Count);
        }

        [TestMethod]
        public void StationBoard()
        {
            testee = new Transport();
            var stationBoard = this.testee.GetStationBoard("Sursee", "8502007");

            Assert.IsNotNull(stationBoard);
        }
          
        [TestMethod]
        public void Connections()
        {
            testee = new Transport();
            var connections = this.testee.GetConnections("Sursee", "Luzern");

            Assert.IsNotNull(connections);
        }



        //Eigener UnitTest mit Datumsabfrage der Connections
        [TestMethod]
        public void GetConnections()
        {
            testee = new Transport();
            var connectionsmitDatum = this.testee.GetConnections("Bern", "Géneve","2021-06-14","19:01");

            Assert.IsNotNull(connectionsmitDatum);
        }

        //Eingener UnitTest mit Datumsabfrage StationBoard
        [TestMethod]
        public void GetStationBoard()
        {
            testee = new Transport();
            var StationBoardmitDatum = this.testee.GetConnections("Basel SBB", "Zürich HB", "2021-05-20", "10:18");

            Assert.IsNotNull(StationBoardmitDatum);
        }


    }
}
