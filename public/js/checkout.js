/**
 * checkout.js
 * Xendit Checkout Demo
 * This file contains the logic behind demo store page
 */

(async () => {
    'use strict';

    let integration;
    let invoiceUrl;
    const buttonStartDemo = document.getElementById('button-start-demo');
    const formConfigure = document.getElementById('form-configure');
    const total = document.getElementById("totalp").innerText;

    formConfigure.addEventListener('submit', (event) => {
        event.preventDefault();

        startDemo();
    });


    // handles invoice creation upon checkout demo launch
    const startDemo = async () => {
        loadingDemoLaunch();

        if (!invoiceUrl) {
            // setup invoice data
            // const { currency, amount } = displayedCartDetails.cart.total;
            var redirect_url = `${window.location.origin}/try-checkout`;
            const invoiceData = {
                'failure_redirect_url': `${window.location.origin}/try-checkout`,
                'success_redirect_url': `${window.location.origin}/try-checkout`,
            };

            // create an invoice for store checkout
            try {

                let response2 = await fetch('/fetchcartz', {
                    method: 'GET',
                });

                let data2 = await response2.json();
                let data3 = {
                    ...data2,
                    ...invoiceData
                }

                const response = await fetch('/api/invoice', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json;charset=utf-8',
                        'Authorization': 'Bearer 2R2gZvra94CqHUdvrUQfUsnT5NfcIE5ADOeiMGqV', //token
                    },
                    body: JSON.stringify(data3)
                });

                const data = await response.json();
                if (response.status >= 200 &&
                    response.status <= 299 &&
                    typeof data.invoice_url !== 'undefined')
                    invoiceUrl = data.invoice_url;

                else alert(data.message);
            } catch (error) {
                alert(error);
            }
        }

        if (invoiceUrl)
            switch (integration) {
                case 'Dialog Pop-up':
                    launchModal();
                    break;
                default:
                    redirectToInvoice();
                    break;
            }

        loadingDemoLaunch();
    };


    // handles redirection option
    const redirectToInvoice = () => {
        window.location.href = invoiceUrl;
    };

    // handles button behaviour upon demo launch
    const loadingDemoLaunch = () => {
        buttonStartDemo.disabled = !buttonStartDemo.disabled;
    };


    // avoid animation during page load
    document.body.classList.remove('loading');
})();
