var vm = new Vue({
    el: '.carousel',
    data: {
        mark: 0,
        img: [
            '/img/a1.jpg',
            '/img/a2.jpg',
            '/img/a3.jpg',
            '/img/a4.jpg'
        ],
        time: null
    },
    methods: { // 添加方法
        change (i) {
            this.mark = i
        },
        prev () {
            this.mark--
            if (this.mark === -1) {
                this.mark = 3
            }
        },
        next () {
            this.mark++
            if (this.mark === 4) {
                this.mark = 0
            }
        },
        autoPlay () {
            this.mark++
            if (this.mark === 4) {
                this.mark = 0
            }
        },
        play () {
            this.time = setInterval(this.autoPlay, 3000)
        },
        enter () {
            console.log('enter')
            clearInterval(this.time)
        },
        leave () {
            console.log('leave')
            this.play()
        }
    },
    created () {
        this.play()
    }
})

$('.special.cards .image').dimmer({
    on: 'hover'
<<<<<<< HEAD
})
=======
});
>>>>>>> 5b643f378bd1761b7831e01ab9d9f6af161b94be
