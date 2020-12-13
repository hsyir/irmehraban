<template>
    <div>

        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">

                <div class="p-3" id="step2">
                    <h4 class="h4">#مرحله 2: تکمیل فرم اطلاعات تماس</h4>

                    <div>

                        <strong v-if="Object.keys(selected_children).length >0">
                            شما تعداد
                            <span class=" text-primary">
        {{ Object.keys(selected_children).length }}
                </span>
                            فرزند انتخاب کرده اید.
                        </strong>

                        <strong v-if="Object.keys(selected_children).length == 0">
                            شما تا کنون هیچ فرزندی را انتخاب نکرده اید.
                        </strong>
                    </div>

                    <div class="p-3">
                <span v-for="(child,key) in selected_children" class="badge-primary badge h3 mx-1 pr-2  pl-3 py-1">
                    <span class="h5">
                        <a class="px-1 text-white" @click="removeChild(key,child)" href="#" @click.prevent>
                            <i class="fa fa-times-circle mt-1"></i>
                        </a>
                        {{ child.name }}
                    </span>
                </span>
                    </div>

                    <div class="mt-5 mb-2">
                        <strong>لطفا فرم زیر را تکمیل کنید:</strong>
                        <div>بعد از ثبت این فرم همکاران ما در واحد اکرام ایتام با شما تماس خواهند گرفت.</div>
                    </div>
                    <form class="childrenList">
                        <div class="form-group">
                            <label for="name">نام و نام خانوادگی:</label>
                            <input type="text" class="form-control" id="name" v-model="name">
                        </div>
                        <div class="form-group">
                            <label for="mobile">شماره موبایل:</label>
                            <input type="text" class="form-control" id="mobile" v-model="mobile">
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary float-left" @click.prevent="submitForm" :disabled="loading">ثبت اطلاعات</button>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-8 col-lg-3 mt-5 ">
                <img src="/svg/kindness.svg" alt="" class="w-100 align-buttom">
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        name: "SelectChildForm",
        props: ["selected_children"],
        components: {},
        data: function () {
            return {
                loading: false,
                name: "",
                mobile: "",
            }
        },
        methods: {
            removeChild(childIndex,child) {
                let vm=this;
                Swal.fire({
                    title: 'آیا مطمئن هستید؟',
                    text: `آیا مطمئن هستید که می خواهید '${child.name}' را از لیست مهربانی خود حذف کنید؟`,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'خیر به حمایت ادامه میدهم',
                    cancelButtonText: 'بله حذف شود'
                }).then((result) => {
                    if (!result.isConfirmed) {
                        vm.$emit("remove", childIndex)
                    }
                })




            },
            submitForm() {

                this.loading = true;
                let vm = this;

                let data = new FormData();
                data.append("supporter_name", this.name);
                data.append("supporter_mobile", this.mobile);
                data.append("selected_children", JSON.stringify(this.selectedChildren()));
                axios.post("/children/submitSupportList", data)
                    .then(res => {


                        setTimeout(function () {
                            window.location.href = res.data.support_url
                        }, 5000)
                        // vm.formSubmitted();
                        // window.location.href = res.data.support_url;
                        Swal.fire({
                            title: 'انجام شد، سپاس',
                            icon: 'success',
                            html:
                                'خیر گرامی، اطلاعات شما در سامانه ایران مهربان ثبت شد. ' +
                                '<br>' +
                                '<br>' +
                                'شما به صورت خودکار به مرحله بعد منتقل خواهید شد.' +
                                '<br>' +
                                '<br>' +
                                'یا اینکه روی لینک زیر کلیک کنید.' +
                                '<br>' +
                                '<a class="btn btn-primary  mt-3" href="/supports/' + res.data.uuid + '">مشاهده شناسنامه حمایت</a>' +
                                '<br>' +
                                '<br>',
                            showCloseButton: false,
                            showCancelButton: false,
                            showConfirmButton: false,
                            focusConfirm: false,
                        })
                        // Swal.fire("ایران مهربان"," اطلاعات با موفقیت ثبت شد <br> لطفا صبر کنید ","success")

                    })
                    .catch(res => {

                    })
                    .then(res => {
                        vm.loading = false;
                    })
                ;
            },

            selectedChildren() {
                return this.selected_children.map(child => {
                    return child.id;
                })
            },
            formSubmitted() {
                this.name = "";
                this.mobile = "";
                this.$emit("submitted");
            }
        },
        mounted() {
        },
    }
</script>

<style scoped>

</style>
