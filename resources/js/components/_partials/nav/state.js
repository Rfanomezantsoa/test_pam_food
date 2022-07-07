import { ref, computed} from 'vue';

export const collapsed=ref(true);
export const toggleMenu= ()=>{
    collapsed.value= !collapsed.value
};

export const COLLAPSED_ELE="hide";
export const SHOW="show";

export const menuState=computed(
    ()=> !collapsed.value? SHOW:COLLAPSED_ELE
);
