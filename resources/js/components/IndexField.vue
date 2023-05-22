<template>
    <div :class="field.class">
        <span :class="'whitespace-no-wrap'">{{ fieldValue }}</span>
    </div>
</template>

<script>
import moment from 'moment';
export default {
    props: ['resourceName', 'field'],
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
