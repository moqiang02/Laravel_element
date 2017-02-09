// export const toggle = ({ commit }) => commit('toggle')
export const toggle = function full(obj) {
    return obj.commit('toggle');
}