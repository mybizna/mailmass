<template>
    <edit-render :path_param="['mailmass', 'group']" :model="model">

        <div class="row">
            <div class="col-md-6">
                <FormKit v-model="model.id" label="Id" id="id" type="hidden" validation="required" />
                <FormKit v-model="model.name" label="Name" id="name" type="text" validation="required" />
                <FormKit v-model="model.description" label="Description" id="description" type="text"
                    validation="required" />
                <FormKit v-model="model.ordering" label="Ordering" id="ordering" type="text" validation="required" />
                <FormKit v-model="model.published" label="Published" id="published" type="text" validation="required" />

            </div>
            <div class="col-md-6">

            </div>
        </div>

    </edit-render>
</template>

<script>
export default {

    data() {
        return {
            id: null,
            model: {
                id: "",
                name: "",
                description: "",
                ordering: "",
                published: "",
            },

        };

    }
};
</script>
