
<template>
    <table-render :path_param="['mailmass', 'group']" title="Mail Mass Group" :table_fields="table_fields">

        <template #header>
            <th-render>Name</th-render>
            <th-render>Description</th-render>
            <th-render>Ordering</th-render>
            <th-render>Published</th-render>
        </template>

        <template #body="{ item }">
            <td>{{ item.name }}</td>
            <td>{{ item.description }}</td>
            <td>{{ item.ordering }}</td>
            <td class="text-center">
                <btn-status :status="item.published"></btn-status>
            </td>
        </template>


    </table-render>
</template>

<script>

export default {
    data() {
        return {
            table_fields: ['name', 'description', 'ordering', 'published'],
        };
    }
};
</script>
