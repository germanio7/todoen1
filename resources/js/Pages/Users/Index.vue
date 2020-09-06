<template>
    <div>
        <layout>
            <div class="w-full rounded overflow-hidden shadow-lg p-2">
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Avatar</th>
                            <th class="px-4 py-2">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr v-for="user in users" :key="user.id">
                            <td class="border px-4 py-2">{{ user.name }}</td>
                            <td class="border px-4 py-2">{{ user.email }}</td>
                            <td
                                class="border px-4 py-2 flex items-center justify-center"
                            >
                                <img
                                    class="w-10 h-10 rounded-full mr-4"
                                    :src="user.avatar"
                                    alt="No Image"
                                />
                            </td>
                            <td class="border px-4 py-2">
                                <div class="flex justify-center items-center">
                                    <inertia-link
                                        :href="`/users/${user.id}/edit`"
                                        class="bg-blue-300 hover:bg-blue-400 text-gray-800 font-bold py-2 px-4 rounded-l"
                                    >
                                        Edit
                                    </inertia-link>
                                    <button
                                        class="bg-red-300 hover:bg-red-400 text-gray-800 font-bold py-2 px-4 rounded-r"
                                        @click="eliminar(user)"
                                    >
                                        Delete
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </layout>
    </div>
</template>

<script>
import layout from "../Shared/Layout";
export default {
    props: ["users"],
    components: { layout },
    methods: {
        eliminar(user) {
            if (confirm("¿Desea eliminar el usuario " + user.name + "?")) {
                this.$inertia.delete("/users/" + user.id);
            }
        }
    }
};
</script>

<style></style>
