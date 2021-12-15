if ( typeof ( CRUMINA ) === 'undefined' ) {
    var CRUMINA = { };
}

CRUMINA.mailchimp = {
    $forms: null,
    init: function () {
        this.$forms = document.querySelectorAll( '.cryptoki-subscribe-form' );
        this.addEventListeners();
    },
    addEventListeners: function () {
        if( this.$forms !== null ) {
            this.$forms.forEach(function(el) {
                el.addEventListener('submit', (e) => {
                    e.preventDefault();

                    var mess = e.target.querySelector('.subscribe-form-message');
                    if(mess !== null) {
                        mess.remove();
                    }

                    const formAction = (e.target.getAttribute('action') !== null) ? e.target.getAttribute('action') : '/forms/submit.php';
                    var formData = new FormData(e.target);
                    formData.append('ajax', '1');
                    fetch(formAction, {
                        method: 'POST',
                        body: formData
                    })
                    .then(resp => resp.text())
                    .then(data => {
                        let p = document.createElement("p");
                        p.append(data);
                        p.classList = 'subscribe-form-message';
                        e.target.append(p);
                    });
                });
            });
        }
    }
};

CRUMINA.mail = {
    $forms: null,
    init: function () {
        this.$forms = document.querySelectorAll( '.cryptoki-form' );
        this.addEventListeners();
    },
    addEventListeners: function () {
        if( this.$forms !== null ) {
            this.$forms.forEach(function(el) {
                el.addEventListener('submit', (e) => {
                    e.preventDefault();

                    var error_mess = e.target.querySelector('.cryptoki-form-error');
                    if(error_mess !== null) {
                        error_mess.remove();
                    }

                    var success_mess = e.target.querySelector('.cryptoki-form-success');
                    if(success_mess !== null) {
                        success_mess.remove();
                    }

                    const formAction = (e.target.getAttribute('action') !== null) ? e.target.getAttribute('action') : '/forms/submit.php';
                    var formData = new FormData(e.target);
                    formData.append('ajax', '1');

                    fetch(formAction, {
                        method: 'POST',
                        body: formData
                    })
                    .then(resp => resp.text())
                    .then(data => {
                        try {
                            let error_mess = '';
                            let success_mess = '';
                            const data_el = JSON.parse(data);
                            if( data_el.status !== null && data_el.status == 0 ) {
                                
                                const errors = ( data_el.errors !== null ) ? data_el.errors : [];
                                if( errors.length != 0 ) {
                                    for( i = 0; i < errors.length; i++ ) {
                                        error_mess += errors[i] + '<br>';
                                    }
                                }

                                let p = document.createElement("p");
                                p.innerHTML = error_mess;
                                p.classList = 'cryptoki-form-error';
                                e.target.append(p);

                            } else if ( data_el.status !== null && data_el.status == 1 ) {

                                success_mess = ( data_el.message !== null ) ? data_el.message : '';
                                let p = document.createElement("p");
                                p.innerHTML = success_mess;
                                p.classList = 'cryptoki-form-success';
                                e.target.append(p);

                            } else {
                                let p = document.createElement("p");
                                p.innerHTML = 'Some problem occurred, please try again.';
                                p.classList = 'cryptoki-form-error';
                                e.target.append(p);
                            }
                        } catch (e) {
                            let p = document.createElement("p");
                            p.innerHTML = 'Some problem occurred, please try again.';
                            p.classList = 'cryptoki-form-error';
                            e.target.append(p);
                        }
                    });
                });
            });
        }
    }
};

document.addEventListener('DOMContentLoaded', function(){
    CRUMINA.mailchimp.init();
    CRUMINA.mail.init();
} );