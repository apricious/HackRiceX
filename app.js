new Vue({
    el:'#hrx_starter',
    data: {
        username: '',
        greeting: ''
    },
    methods: {
        greet: function() {

            this.greeting = "Hi, "
            this.greeting = this.greeting.concat(this.username, "!")
            this.greeting = this.greeting.concat(" I'd also like to take this opportunity to greet the world!")
        }
    }
});