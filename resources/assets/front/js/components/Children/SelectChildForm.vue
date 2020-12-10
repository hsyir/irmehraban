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
                    <a class="px-1 text-white" @click="removeChild" href="#" @click.prevent>
                        <i class="fa fa-times-circle mt-1"></i>
                    </a>
                    {{ child.name }}
                </span>
            </span>

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
                    <button class="btn btn-primary float-left" @click.prevent="submitForm">ثبت اطلاعات</button>
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
                name: "",
                mobile: "",
            }
        },
        methods: {
            removeChild(childIndex) {
                this.$emit("remove", childIndex)
            },
            submitForm() {

                let vm = this;

                let data = new FormData();
                data.append("supporter_name", this.name);
                data.append("supporter_mobile", this.mobile);
                data.append("selected_children", JSON.stringify(this.selectedChildren()));
                axios.post("/children/submitSupportList", data)
                    .then(res => {
                        vm.formSubmitted();
                        window.location.href = res.data.support_url;
                    });
            },

            selectedChildren() {
                return this.selected_children.map(child => {
                    return child.id;
                })
            },
            formSubmitted() {
                this.name="";
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
