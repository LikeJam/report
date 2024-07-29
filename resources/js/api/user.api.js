import axios from "axios";

export const userApi = {
    query: async ({search = '', filters = []}) => await axios.get('api/userQuery', {
        params: {
            search: search,
            filters: filters
        }
    }),
}
