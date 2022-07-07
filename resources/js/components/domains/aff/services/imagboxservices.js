import axios from "axios";
import { ref } from "vue";

export default function useImageBox(){
    const imageboxes = ref([]);

    const getImageBoxes= async()=>{
        let response = await axios.get('api/imagebox?take=2');
        imageboxes.value=response.data;
    };

    return {

        getImageBoxes,
        imageboxes
    }
}
