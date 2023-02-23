
<template>
    <table-list title="Mail Mass Group" :path_param="path_param" :search_fields="search_fields" :model="model"
        :table_fields="table_fields"></table-list>
</template>

<script>

export default {
    data () {
        return {
            path_param: ["mailmass", "group"],
            model: {
                id: "",
                name: "",
                description: "",
                ordering: "",
                published: "",
            },

            search_fields: [
                { type: "text", name: "name", label: "Name", ope: "", },
                { type: "text", name: "description", label: "Description", ope: "", },
                { type: "text", name: "ordering", label: "Ordering", ope: "", },
                { type: "text", name: "published", label: "Published", ope: "", },
            ],
            table_fields: [
                { text: "Name", prop: "name", name: "name", },
                { text: "Description", prop: "description", name: "description", },
                { text: "Ordering", prop: "ordering", name: "ordering", },
                { text: "Published", prop: "published", name: "published", },
            ],
        };
    }
};
</script>
