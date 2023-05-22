<template>
    <panel-item :field="field">
        <template slot="value">
            <div :class="field.class">
                <span :class="'whitespace-no-wrap'">{{ fieldValue }}</span>
            </div>
        </template>
    </panel-item>
</template>

<script>
import moment from 'moment';
export default {
    props: ['resource', 'resourceName', 'resourceId', 'field'],
    computed: {
        fieldType() {
            return this.field.fieldType;
        },
        fieldValue() {
            let $value = '-';
            if(this.fieldType === 'datetime') {
                $value = moment(this.field.value).format('YYYY-MM-DD hh:mm A');
            } else {
                $value = moment(this.field.value).format('YYYY-MM-DD');
            }
            return $value;
        }
    }
}
</script>
