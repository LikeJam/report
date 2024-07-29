import axios from "axios";

export const filterApi = {
    filters: async () => await axios.get('api/filter'),
}
