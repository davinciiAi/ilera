window.Vue = require('vue');


const app = new Vue({
    el: '#app',
    data(){
        return {
            amount: 50,
            profit: '',
            percent: 102,
            days: 1,
            plan: 'daily',
            error: false
        }
    },
    watch:{
        amount: function () {
            this.calculateProfit();
        },
        plan: function () {
            if(this.plan === 'daily'){
                this.amount = 50;
                this.percent = 102;
                this.days = 1;
                this.error = false;
            } else if(this.plan === 'weekly'){
                this.amount = 100;
                this.percent = 110;
                this.days = 7;
                this.error = false;
            } else if(this.plan === 'monthly'){
                this.amount = 3000;
                this.percent = 150;
                this.days = 30;
                this.error = false;
            }
            this.calculateProfit();
        }
    },
    methods:{
        calculateProfit(){
            if(this.days === 1){
                if(this.amount < 50){
                    this.error = true;
                    return this.profit = "Less than minimum amount: $50!"
                }if(this.amount > 10000) {
                    this.error = true;
                    return this.profit = "More than maximum amount: $10000!"
                }else{
                    this.error = false;
                    return this.profit = 'You\'ll earn $' + ((this.percent / 100) * parseFloat(this.amount)).toFixed(2) + ' after 24 hours'
                }
            }

            else if(this.days === 7){
                if(this.amount < 100){
                    this.error = true;
                    return this.profit = "Less than minimum amount: $100!"
                }if(this.amount > 100000) {
                    this.error = true;
                    return this.profit = "More than maximum amount: $100000!"
                }else{
                    this.error = false;
                    return this.profit = 'You\'ll earn $' + ((this.percent / 100) * parseFloat(this.amount)).toFixed(2) + ' after ' + this.days + 'days'
                }
            }

            else if(this.days === 30){
                if(this.amount < 3000){
                    this.error = true;
                    return this.profit = "Less than minimum amount: $3000!"
                }if(this.amount > 100000) {
                    this.error = true;
                    return this.profit = "More than maximum amount: $100000!"
                }else{
                    this.error = false;
                    return this.profit = 'You\'ll earn $' + ((this.percent / 100) * parseFloat(this.amount)).toFixed(2) + ' after ' + this.days + 'days'
                }
            }
        },
    },
    mounted(){
        let url_string = window.location.href
        let url = new URL(url_string);
        let c = url.searchParams.get("plan");

        if(c === 'daily'){
            this.amount = 50;
            this.percent = 102;
            this.days = 1;
        } else if(c === 'weekly'){
            this.amount = 100;
            this.percent = 110;
            this.days = 7;
        } else if(c === 'monthly'){
            this.amount = 3000;
            this.percent = 150;
            this.days = 30;
        }

        this.calculateProfit();
    }
});
