<template>
    <div>

        <div class="p-3">
            <h4 class="h4"># مرحله 2: تکمیل فرم اطلاعات تماس</h4>

            <strong>
                شما تعداد
                <span class=" text-primary">
        {{ Object.keys(selected_children).length }}
                </span>
                 فرزند انتخاب کرده اید.
            </strong>

            <span v-for="child in selected_children" class="text-primary"> {{ child.name }} </span>


            <p>لطفا فرم زیر را تکمیل کنید:</p>
            <p>بعد از ثبت این فرم همکاران ما در واحد اکرام ایتام با شما تماس خواهند گرفت.</p>

            <form action="">
                <div class="form-group">
                    <label for="name">نام و نام خانوادگی:</label>
                    <input type="text" class="form-control" id="name">
                </div>
                <div class="form-group">
                    <label for="mobile">شماره موبایل:</label>
                    <input type="text" class="form-control" id="mobile">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary float-left">ثبت اطلاعات</button>
                </div>
            </form>

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
            }
        },
        methods: {},
        mounted() {
        },
    }
</script>

<style scoped>

</style>
