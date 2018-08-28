<template>
    <panel-item :field="field">
        <template slot="value">
           {{ formatBytes }}
        </template>
    </panel-item>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],

    computed: {
        formatBytes() {
            const bytes = this.field.value;
            if (bytes == 0 || !bytes) return '0 Byte';
            const sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
            const i = parseInt(Math.floor(Math.log(bytes) / Math.log(1000)));
            return Math.round(bytes / Math.pow(1000, i), 2) + ' ' + sizes[i];
        },
    }
}
</script>
