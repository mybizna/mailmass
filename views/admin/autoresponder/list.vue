
<template>
    <table-render :path_param="['mailmass', 'autoresponder']" title="Autoresponder Mail Masses"
        :table_fields="table_fields">

        <template #header>
            <th-render>Subject</th-render>
            <th-render>Wait Period</th-render>
            <th-render>Table Name</th-render>
            <th-render>Email Field</th-render>
            <th-render>Date Field</th-render>
            <th-render>Start Date</th-render>
            <th-render>End Date</th-render>
            <th-render>Published</th-render>
        </template>

        <template #body="{ item }">
            <td>{{ item.subject }}</td>
            <td>{{ item.wait_period }}</td>
            <td>{{ item.table_name }}</td>
            <td>{{ item.email_field }}</td>
            <td>{{ item.date_field }}</td>
            <td>{{ item.start_date }}</td>
            <td>{{ item.end_date }}</td>
            <td>{{ item.published }}</td>
        </template>


    </table-render>
</template>

<script>

export default {
    data() {
        return {
            table_fields: ['subject', 'wait_period', 'table_name', 'email_field', 'date_field', 'start_date', 'end_date', 'published'],
        };
    }
};
</script>
