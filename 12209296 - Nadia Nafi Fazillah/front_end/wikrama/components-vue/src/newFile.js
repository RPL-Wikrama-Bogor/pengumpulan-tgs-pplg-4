import Card from '@/components/my-components/Card.vue';

export default (await import('vue')).defineComponent({
components: {
Card,
'card-service': Card
}
});
