window.onload = () => {
    const urls = ["https://api.thingspeak.com/channels/756771/fields/1/last", "https://api.thingspeak.com/channels/756771/fields/2/last", "https://api.thingspeak.com/channels/756771/fields/3/last", "https://api.thingspeak.com/channels/756771/fields/4/last"];
    callDataOfUrls()

    async function callDataOfUrls() {
        const count = 0;
        urls.forEach(async (doc) => {
            const data = await fetch(doc);
            const value = await data.text();
            console.log(value);
            count++;
        });
    
        
    }
}