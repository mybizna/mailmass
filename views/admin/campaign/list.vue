
<template>
    <table-render :path_param="['mailmass', 'campaign']" title="Mail Masses Campaign" :table_fields="table_fields">

        <template #header>
            <th-render>Subject</th-render>
            <th-render>Body</th-render>
            <th-render>Send Date</th-render>
            <th-render>Is Sent</th-render>
            <th-render>Published</th-render>
        </template>

        <template #body="{ item }">
            <td>{{ item.subject }}</td>
            <td>{{ item.body }}</td>
            <td>{{ item.send_date }}</td>
            <td class="text-center">
                <btn-status :status="item.is_sent"></btn-status>
            </td>
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
            table_fields: ['subject', 'body', 'send_date', 'is_sent', 'published'],

        };
    }
};
</script>
