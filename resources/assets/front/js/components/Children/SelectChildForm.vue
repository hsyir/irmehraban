<template>
    <div>

        <div class="p-3">
            <h4 class="h4"># مرحله 2: تکمیل فرم اطلاعات تماس</h4>

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

            <span v-for="(child,key) in selected_children" class="badge-primary badge h3 mx-1 pr-2  pl-3 py-1">
                <span class="h5">
                    <a class="px-1 text-white" @click="removeChild" href="#" @click.prevent >
                        <i class="fa fa-times-circle mt-1"></i>
                    </a>
                    {{ child.name }}
                </span>
            </span>


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
        methods: {
            removeChild(childIndex){
                this.$emit("remove",childIndex)
            }
        },
        mounted() {
        },
    }
</script>

<style scoped>

</style>
