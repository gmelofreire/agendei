<template>
    <Sidebar>
        <div class="container mx-auto grid gap-5">


            <button @click="ControleModal()">criar</button>
            <table class="border-collapse border border-slate-500 ...">
                <thead>
                    <tr>
                        <th class="border border-slate-600 ...">Nome</th>
                        <!-- <th class="border border-slate-600 ...">Preço</th>
                        <th class="border border-slate-600 ...">Especialidade</th> -->
                        <th class="border border-slate-600 ...">Acoes</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="especialidade in listaEspecialidades" :key="especialidade.id">
                        <td class="border border-slate-700 ...">{{ especialidade.nome }}</td>
                        <!-- <td class="border border-slate-700 ...">{{ especialidade.preco }}</td>
                        <td class="border border-slate-700 ...">{{ especialidade.especialidade.nome }}</td> -->
                        <td class="border border-slate-700 ...">
                            <div>
                                <button>editar</button>
                                <button>excluir</button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <!-- {{ listaEspecialidades }} -->
        </div>
    </Sidebar>
    <ModalTESTE :abrir="open" @close="ControleModal" @registroCriado="atualizarLista"/>
</template>

<script setup>
    import ModalTESTE from '@/Components/modal/ModalEspecialidade.vue';
    import Sidebar from '@/Components/Sidebar.vue';
    import { ref } from 'vue';


    const props = defineProps({
        especialidades: Array
    })
    const listaEspecialidades = ref([...props.especialidades]);
    const open = ref(false);

    const ControleModal = () => {
        open.value = !open.value;
    }

    const atualizarLista = (especialidade) => {
        listaEspecialidades.value.push(especialidade.item);
    }

</script>
