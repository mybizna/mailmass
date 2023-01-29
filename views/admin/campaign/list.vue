
<template>
    <table-list title="Mail Masses Campaign" :path_param="path_param" :search_fields="search_fields" :model="model"
        :table_fields="table_fields"></table-list>
</template>

<script>

export default {
    components: {
        TableList: window.$func.fetchComponent("components/common/TableList.vue")
    },
    data () {
        return {
            path_param: ["mailmass", "campaign"],
            model: {
                id: "",
                subject: "",
                body: "",
                send_date: "",
                is_sent: "",
                published: "",
            },
            search_fields: [
                { type: "text", name: "subject", label: "Subject", ope: "", },
                { type: "text", name: "body", label: "Body", ope: "", },
                { type: "text", name: "send_date", label: "Send Date", ope: "", },
                { type: "text", name: "is_sent", label: "Is Sent", ope: "", },
                { type: "text", name: "published", label: "Published", ope: "", },
            ],
            table_fields: [
                { text: "Subject", prop: "subject", name: "subject", },
                { text: "Body", prop: "body", name: "body", },
                { text: "Send Date", prop: "send_date", name: "send_date", },
                { text: "Is Sent", prop: "is_sent", name: "is_sent", },
                { text: "Published", prop: "published", name: "published", },
            ],
        };
    }
};
</script>
