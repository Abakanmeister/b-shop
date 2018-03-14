new Vue({
    delimiters: ['${', '}'],
    el: '.show-catalog',
    data: {
        carBrand: '',
        title: '',
        year: '',
        price: '',
        description: '',
        flag: false,
        submitLink: false,
        editIcon: `<i class="fas fa-edit" style="color: #23527c;cursor: pointer;font-size: 18px;">                     
                    </i>`,
        submitIcon: `<i class="fas fa-check" style="color: #23527c;cursor: pointer;font-size: 18px;">                     
                    </i>`,
    },
    methods: {
        switchFlag: function () {
            console.log(this.title);
            console.log(this.description);
            console.log(this.year);
            if (this.flag == false) {
                this.flag=true;
                this.submitLink=true;
            } else {
                this.flag=false;
                this.submitLink=false;
            }
        },
        switchIcon: function () {
            if (this.flag == false) {
                return this.editIcon;
            } else {
                return this.submitIcon;
            }
        },
        showProductSubmit: function () {
            if (this.submitLink == false) {
                return this.linkClass = '';
            } else {
                return this.linkClass = 'submit_link';
            }
        }
    }
});