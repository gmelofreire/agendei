export const menuItems = [
    { name: 'Home', href: '/', icon: HomeIcon, component: 'Home'},
    { name: 'Admin', href: '/dashboard', icon: UserIcon, component: 'Dashboard'},
    { name: 'Calendário', href: '/welcome', icon: CalendarIcon, component: 'Welcome'},
    { name: 'Serviços', href: route("servico.index"), icon: UsersIcon, component: 'ServicoVue'},
    { name: 'Funcionarios', href: '#', icon: FolderIcon},
];

import {
    CalendarIcon,
    ChartPieIcon,
    DocumentDuplicateIcon,
    FolderIcon,
    HomeIcon,
    UsersIcon,
    UserIcon,

} from '@heroicons/vue/24/outline'
