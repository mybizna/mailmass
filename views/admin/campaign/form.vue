<template>
    <edit-renderrrr :path_param="path_param" :model="model">

        <div class="row">
            <div class="col-md-6">
                <FormKit v-model="model.id" label="Id" id="id" type="hidden" validation="required" />
                <FormKit v-model="model.subject" label="Subject" id="subject" type="text" validation="required" />
                <FormKit v-model="model.send_date" label="Send Date" id="send_date" type="text" validation="required" />
                <FormKit v-model="model.is_sent" label="Is Sent" id="is_sent" type="text" validation="required" />
                <FormKit v-model="model.published" label="Published" id="published" type="text" validation="required" />
            </div>
            
            <div class="col-md-6">
                <FormKit v-model="model.body" label="Body" id="body" type="text" validation="required" />
            </div>
        </div>

    </edit-renderrrr>
</template>

<script>
export default {
   
    data () {
        return {
            id: null,
            path_param: ["mailmass", "campaign"],
            model: {
                id: "",
                subject: "",
                body: "",
                send_date: "",
                is_sent: "",
                published: "",
            },

        };

    }
};
</script>
