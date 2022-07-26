var app = new Vue(
    {
        el: '#root',

        data: {
            // array vuoto dove salvo le info per leggerle
            myDiscs:[]
        },
        mounted(){
            axios.get('http://localhost/php-ajax-dischi/api.php ')
            .then((response)=>{
                
                this.myDiscs = response.data;

            });
        }
    }
); 