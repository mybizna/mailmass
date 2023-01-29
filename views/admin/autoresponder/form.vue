<template>
    <table-edit :path_param="path_param" :model="model">

        <div class="row">
            <div class="col-md-6">
                <FormKit v-model="model.id" label="Id" id="id" type="hidden" validation="required" />
                <FormKit v-model="model.subject" label="Subject" id="subject" type="text" validation="required" />
                <FormKit v-model="model.wait_period" label="Wait Period" id="wait_period" type="text"
                    validation="required" />
                <FormKit v-model="model.table_name" label="Table Name" id="table_name" type="text"
                    validation="required" />
                <FormKit v-model="model.email_field" label="Email Field" id="email_field" type="text"
                    validation="required" />
                <FormKit v-model="model.date_field" label="Date Dield" id="date_field" type="text"
                    validation="required" />
                <FormKit v-model="model.start_date" label="Start Date" id="start_date" type="text"
                    validation="required" />
                <FormKit v-model="model.end_date" label="End Date" id="end_date" type="text" validation="required" />
                <FormKit v-model="model.published" label="Published" id="published" type="text" validation="required" />
            </div>
            <div class="col-md-6">
                <FormKit v-model="model.body" label="Body" id="body" type="text" validation="required" />
            </div>
        </div>

    </table-edit>
</template>

<script>
export default {
    components: {
        TableEdit: window.$func.fetchComponent("components/common/TableEdit.vue")
    },
    data() {
        return {
            id: null,
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

        };

    }
};
</script>
