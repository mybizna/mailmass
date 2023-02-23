
<template>
    <table-list title="Autoresponder Mail Masses" :path_param="path_param" :search_fields="search_fields" :model="model"
        :table_fields="table_fields"></table-list>
</template>

<script>

export default {
    data() {
        return {
            path_param: ["mailmass", "autoresponder"],
            model: {
                id: "",
                subject: "",
                body: "",
                wait_period: "",
                table_name: "",
                email_field: "",
                start_date: "",
                end_date: "",
                published: "",
            },
            search_fields: [
                { type: "text", name: "subject", label: "Subject", ope: "", },
                { type: "text", name: "wait_period", label: "Wait Period", ope: "", },
                { type: "text", name: "table_name", label: "Table Name", ope: "", },
                { type: "text", name: "email_field", label: "Email Field", ope: "", },
                { type: "text", name: "date_field", label: "Date Field", ope: "", },
                { type: "text", name: "start_date", label: "Start Date", ope: "", },
                { type: "text", name: "end_date", label: "End Date", ope: "", },
                { type: "text", name: "published", label: "Published", ope: "", },
            ],
            table_fields: [
                { text: "Subject", prop: "subject", name: "subject", },
                { text: "Wait Period", prop: "wait_period", name: "wait_period", },
                { text: "Table Name", prop: "table_name", name: "table_name", },
                { text: "Email Field", prop: "email_field", name: "email_field", },
                { text: "Date Field", prop: "date_field", name: "date_field", },
                { text: "Start Date", prop: "start_date", name: "start_date", },
                { text: "End Date", prop: "end_date", name: "end_date", },
                { text: "Published", prop: "published", name: "published", },
            ],
        };
    }
};
</script>
