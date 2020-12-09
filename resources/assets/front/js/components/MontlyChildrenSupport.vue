<template>
    <div>
        <div>
            <h3>حمایت ماهیانه از فرزندان ایتام و محسنین</h3>
            <p>شما میتوانید به صورت ماهیانه از فرزندان ایتام و محسنین با حداقل مبلغ 10 هزار تومان حمایت کنید.</p>
            <p>لطفا مراحل زیر را دنبال کنید</p>
        </div>

        <div class="p-3">
            <children-list @select="childSelected" @remove="removeChild"
                           :selected_children="selected_children"></children-list>
            <select-child-form :selected_children="selected_children" @remove="removeChild"
                               @submitted="formSubmitted"></select-child-form>
        </div>
    </div>
</template>

<script>

    import SelectChildForm from "./Children/SelectChildForm";
    import ChildrenList from "./Children/ChildrenList";

    export default {
        props: [],
        components: {
            ChildrenList,
            SelectChildForm

        },
        data: function () {
            return {
                loading: false,
                selected_children: [],
            }
        },
        methods: {
            childSelected(child) {
                this.addToSelection(child)
            },
            addToSelection(child) {
                this.selected_children.push(child);
                this.selected_children = [...new Set(this.selected_children)]
            },
            removeChild(childIndex) {
                this.selected_children.splice(childIndex, 1)
            },
            formSubmitted() {
                this.selected_children=[];
            }

        },
        mounted() {
        },
    }
</script>

<style scoped>

</style>
