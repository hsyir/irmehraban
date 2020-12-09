<template>
    <div>

        <div>
            <h4># مرحله 1: انتخاب فرزندان</h4>
            <p>لطفا از لیست زیر فرزندان مورد نظر خود را انتخاب کنید:</p>
        </div>

        <div class="row">
            <div v-for="child in children_list" class="col-sm-6 col-md-4 mb-4 col-lg-3">
                <div class="card shadow h-100">
                    <div class="card-body">
                        <div class="row justify-content-center mb-3">
                            <div class="col-4 col-sm-5 col-md-6">
                                <img :src="child.avatar_url" class="w-100 border " alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class=" text-primary"><span class="h4">{{ child.name}}</span>
                                    / {{ child.age }} ساله
                                </div>
                            </div>

                            <div class="col-12">
                                <div>

                                </div>
                                <div>
                                    <strong>شهر:</strong> کاشمر
                                </div>
                                <p class="p-2">
                                    {{ child.about }}
                                </p>
                                <div>
                                    <div v-for="tag in child.tags" class="badge badge-secondary text-white">
                                        {{ tag.name.fa }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-outline-primary float-left"
                                @click="selectChild(child)"
                        ><i
                            class="fa fa-plus"> </i>
                            افزودن به لیست مهربانی
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class="col">
                <div class="text-center">
                    <button class="btn btn-outline-primary ">مشاهده موارد بیشتر</button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        name: "ChildrenList",
        props: ["selected_children"],
        components: {},
        data: function () {
            return {
                loading: false,
                children_list: {},
            }
        },
        methods: {
            getList() {
                let vm = this;
                axios.get("getChildrenList")
                    .then(res => {
                        vm.children_list = res.data.data;
                    })
            },
            selectChild(child) {
                this.$emit("select", child);
            },

        },
        mounted() {
            this.getList();
        },
    }
</script>

<style scoped>

</style>
