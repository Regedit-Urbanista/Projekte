namespace SwissTransport.Core
{
    using System.Threading.Tasks;

    using SwissTransport.Models;

    public interface ITransport
    {
        Stations GetStations(string query);

        //DateTime und timeStation wurde hinzugefügt 
        StationBoardRoot GetStationBoard(string station, string id, string DateTime, string timeStation);

        //Wurde hinzugefügt weil sonst die Unit Test nicht gehen würden
        StationBoardRoot GetStationBoard(string station, string id);

        //DateTime und timeStation wurde hinzugefügt 
        Connections GetConnections(string fromStation, string toStation, string DateTime, string timeStation);

        //Wurde hinzugefügt weil sonst die Unit Test nicht gehen würden
        Connections GetConnections(string fromStation, string toStation);
    }
}