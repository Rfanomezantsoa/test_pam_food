import axios from "axios";
import { ref } from "vue";

export default function useHeadlineHero(){
    const hero = ref({});

    const heros = ref([]);



    const getHeadlineHeroByPage= async(page)=>{
        let response = await axios.get("api/headlinehero/"+page);
        hero.value=response.data;
    }
    const getHeadlineHeros= async()=>{
        let response = await axios.get("api/headlinehero");
        hero.value=response.data;
    }

    return {
        hero,
        heros,
        getHeadlineHeroByPage,
        getHeadlineHeros
    }
}
