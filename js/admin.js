window.onload = () => {
    const urls = ["https://api.thingspeak.com/channels/756771/fields/1/last", "https://api.thingspeak.com/channels/756771/fields/2/last", "https://api.thingspeak.com/channels/756771/fields/3/last"];
    callDataOfUrls()
    let values = []
    async function callDataOfUrls() {
        let count = 0;
        let data = await fetch(urls[0]);
        let valuePlaceholder = await data.text();
        values.push(parseFloat(valuePlaceholder).toFixed(2))
        data = await fetch(urls[1]);
        values.push(await data.text())
        data = await fetch(urls[2]);
        values.push(await data.text())
        if(window.innerWidth < 500) {
            for(let i = 0;i < 3; i++) {
                document.getElementById(`${i}`).innerHTML = values[i];
            }
        }
        else {
            for(let i = 0;i < 3; i++) {
                document.getElementById(`${i}w`).innerHTML = values[i];
            }
        }
        
    
        
    }
}