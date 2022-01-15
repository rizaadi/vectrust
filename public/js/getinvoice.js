/**
 * checkout.js
 * Xendit Checkout Demo
 * This file contains the logic behind demo store page
 */



// handles invoice creation upon checkout demo launch


// setup invoice data


// create an invoice for store checkout
async function startDemo(){
    console.log("haloo");
    try {

        const response = await fetch('/api/getinvoice', {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json;charset=utf-8',
                'Authorization': 'Bearer 2R2gZvra94CqHUdvrUQfUsnT5NfcIE5ADOeiMGqV', //token
            },
        });

        let data = response.json();
        console.log(data);
    } catch (error) {
        alert("halo " + error);
    }
}

startDemo();