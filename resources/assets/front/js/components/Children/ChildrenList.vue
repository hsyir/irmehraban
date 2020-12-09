<template>
    <div>

        <div>
            <h4># مرحله 1: انتخاب فرزندان</h4>
            <p>لطفا از لیست زیر فرزندان مورد نظر خود را انتخاب کنید:</p>
        </div>

        <div class="row">
            <div v-for="child in children_list" class="col-sm-6 col-md-4 mb-4 col-lg-3">
                <div class="card shadow h-100 " v-if="!isSelected(child)">
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
                <div class="card shadow h-100 " v-if="isSelected(child)">
                    <div class="card-body">
                        <div class="row justify-content-center mb-3">
                            <div class="col-4 col-sm-5 col-md-6 ">
                                <img :src="child.avatar_url" class="w-100 border" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class=" text-primary"><span class="h4">{{ child.name}}</span>
                                    / {{ child.age }} ساله
                                </div>
                            </div>


                            <div class="col-12 px-5 mt-3">
                                <img src="/images/happyFace.jpg" class="w-100 " alt="" >
                            </div>
                            <div class="col-12 p-2">
                                شما "{{ child.name }}" عزیز ما را به لیست مهربانی خود افزوده اید.
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-outline-danger float-left"
                                @click="removeChild(child)"
                        ><i class="fa fa-minus-circle"> </i>
                            حذف از لیست
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div v-if="loading" class="text-center h3 text-secondary p-3 pb-5">
            <i  class="fa fa-spinner fa-spin "></i>
        </div>
        <div class="p-3 pb-5 text-center" v-if="activeLoadMoreBtn && more_btn && !loading">
            <a type="button" class="btn btn-outline-primary btn-sm" href="#"
               :disabled="loading" @click.prevent="getList" >
                <i v-if="loading" class="fa fa-spinner fa-spin"></i> نمایش بیشتر...  </a>
        </div>

    </div>
</template>

<script>

    export default {
        name: "ChildrenList",
        props: {
            url: {default: '/getChildrenList'},
            count_per_page: {default: 6},
            more_btn: {default: true},
            selected_children: {default: []},
        },
        components: {},
        data: function () {
            return {
                loading: false,
                children_list: [],
                activeLoadMoreBtn:false,
                page:0,
            }
        },
        methods: {
            getList() {
                let vm = this;
                this.loading = true;
                vm.page++;
                var data = {
                    page: this.page,
                    per_page: this.count_per_page,
                    activeLoadMoreBtn: false,
                };
                axios.get(vm.url + '?' + $.param(data)).then(response => {
                    console.log(response);
                    let children = response.data.data;
                    if(response.data.hasOwnProperty("meta"))
                    {
                        let meta = response.data.meta;
                        vm.activeLoadMoreBtn = vm.page >= meta.last_page ? false : true;
                    }
                    else
                    {
                        vm.activeLoadMoreBtn = false;
                    }
                    vm.children_list = [...vm.children_list, ...children];
                })
                    .catch()
                    .then(function () {
                        vm.loading = false;
                    })
            },
            getList2() {
                let vm = this;
                axios.get("getChildrenList")
                    .then(res => {
                        vm.children_list = res.data.data;
                    })
            },
            selectChild(child) {
                this.$emit("select", child);
            },
            removeChild(child) {
                this.$emit("remove", this.findSelectedChildIndex(child));
            },
            isSelected(theChild) {
                return this.findSelectedChildIndex(theChild) !== false;
            },
            findSelectedChildIndex(theChild) {
                let selectedChildIndex =
                    this.selected_children.findIndex((child) => {
                    return child == theChild ;
                })
                return selectedChildIndex== -1 ? false : selectedChildIndex

            }

        },
        mounted() {
            this.getList();
        },
    }
</script>

<style scoped>

</style>
