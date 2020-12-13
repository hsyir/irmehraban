<template>
    <div>
        <button class="btn btn-outline-light" type="button" @click="copy"><i class="fa fa-copy"></i> کپی</button>
        <button v-if="navishare" @click.prevent="share" class="btn btn-outline-light"><i class="fa fa-share-alt"></i> اشتراک گذاری </button>
    </div>
</template>

<script>
    export default {
        props: {
            url: {
                default: window.location.href
            },
            title: {
                default: "ایران مهربان من"
            },
            text: {
                default: "دوست مهربان و گرامی، لطفا از این سایت بازدید کنید ."
            },
        },
        data: function () {
            return {
                navishare: false,
            }
        },
        methods: {
            share() {
                if (navigator.share !== undefined) {
                    navigator
                        .share({
                            title: this.title,
                            text: this.text,
                            url: this.url
                        })
                        .then(() => console.log("Shared!"))
                        .catch(err => console.error(err));
                }
            },
            copy() {
                this.copyToClipboard(this.url);
            },
            copyToClipboard(value) {

                var tempInput = document.createElement("input");
                tempInput.value = value;
                document.body.appendChild(tempInput);
                tempInput.select();

                try {
                    let success = document.execCommand("copy");
                    document.body.removeChild(tempInput);
                    if (success)
                        Swal.fire({
                            "title": "انجام شد",
                            "text": "لینک کپی شد، لطفا با اشتراک گذاری در شبکه های اجتماعی به ما کمک کنید.",
                            "icon": "success",
                            confirmButtonText: 'بسیار خب',
                        })

                    return "";
                } catch (e) {

                }
                alert("انجام نشد.")

            }

        },
        mounted() {
            if ("share" in navigator)
                this.navishare = true;


        },
    }
</script>


