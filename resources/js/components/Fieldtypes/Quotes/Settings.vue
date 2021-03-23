<template>
    <div class="row">
        <ui-toggle
            class="col w-full sm:w-1/2"
            name="settings.multiple"
            label="Multi Select"
            help="Should this field allow multiple options to be selected?"
            :has-error="errors.has('settings.multiple')"
            :error-message="errors.get('settings.multiple')"
            v-model="settings.multiple">
        </ui-toggle>

        <ui-toggle
            class="col w-full sm:w-1/2"
            name="settings.filterable"
            label="Filterable"
            help="Should this field offer a search filter?"
            :has-error="errors.has('settings.filterable')"
            :error-message="errors.get('settings.filterable')"
            v-model="settings.filterable">
        </ui-toggle>
    </div>
</template>

<script>
    export default {
		name: 'quote-fieldtype-settings',

		props: {
		    value: {
		        type: Object,
		        required: true
		    },
		},

		computed: {
		    settings: {
		        get() {
		            return this.value.settings || {}
		        },
		        set(value) {
		            this.$set(this.value.settings, value)
		        }
		    },

		    errors() {
		        return this.value.errors || {}
		    }
		}
    }
</script>
