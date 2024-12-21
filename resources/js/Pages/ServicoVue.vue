<template>
    <Sidebar>
        <div class="container mx-auto grid gap-5">


            <button @click="ControleModal()">criar</button>
            <table class="border-collapse border border-slate-500 ...">
                <thead>
                    <tr>
                        <th class="border border-slate-600 ...">Nome</th>
                        <th class="border border-slate-600 ...">Preço</th>
                        <th class="border border-slate-600 ...">Especialidade</th>
                        <th class="border border-slate-600 ...">Acoes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="servico in servicos" :key="servico.id">
                        <td class="border border-slate-700 ...">{{ servico.nome }}</td>
                        <td class="border border-slate-700 ...">{{ servico.preco }}</td>
                        <td class="border border-slate-700 ...">{{ servico.especialidade.nome }}</td>
                        <td class="border border-slate-700 ...">
                            <div>
                                <button>editar</button>
                                <button>excluir</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </Sidebar>
    <ModalTESTE :abrir="open" @close="ControleModal" />
</template>

<script setup>
    import ModalTESTE from '@/Components/ModalTESTE.vue';
    import Sidebar from '@/Components/Sidebar.vue';
    import { ref } from 'vue';


    const props = defineProps({
        servicos: Array
    })

    const open = ref(false);
    const ControleModal = () => {
        open.value = !open.value;
    }



</script>
