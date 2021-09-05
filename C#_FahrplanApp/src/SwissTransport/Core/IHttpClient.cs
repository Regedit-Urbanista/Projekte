namespace SwissTransport.Core
{
    using System;
    using System.Threading.Tasks;

    public interface IHttpClient : IDisposable
    {
        string GetString(Uri uri);

        TObject GetObject<TObject>(Uri uri, Func<string, TObject> converter);
    }
}