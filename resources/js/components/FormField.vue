<template>
  <default-field :field="field" :errors="errors" :show-help-text="showHelpText">
    <template slot="field">
       <flatPickr v-model="value" :config="config" :class="'w-full form-control form-input form-input-bordered '+field.class" @on-change="onChange" />
    </template>
  </default-field>
</template>

<script>
import { FormField, HandlesValidationErrors } from 'laravel-nova';
import flatPickr from 'vue-flatpickr-component';
import 'flatpickr/dist/flatpickr.css';

export default {
  mixins: [FormField, HandlesValidationErrors],

  props: ['resourceName', 'resourceId', 'field'],

  components: {
    flatPickr
  },

  methods: {
    /*
     * Set the initial, internal value for the field.
     */
    setInitialValue() {
      this.value = this.field.value || ''
    },

    /**
     * Fill the given FormData object with the field's internal value.
     */
    fill(formData) {
      formData.append(this.field.attribute, this.value || '');
    },
    onChange: function(selectedDates, dateStr, instance) {
        //...
        console.log(selectedDates, dateStr, instance);
    },
  },
  computed: {
    isEnableTime() {
      return this.field.fieldType === 'datetime';
    },
    config() {
     return {
      enableTime: this.isEnableTime,
      dateFormat: this.field.dateFormat,
      altInput: false,
     }
    },
  },
}
</script>
