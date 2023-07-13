<template>
<div>
    <div class="calendar">
    <div class="header">
        <button id = "prev-month" class="btn btn-link" @click="previousMonth"><i class="bi bi-caret-left"></i> </button>
        <b><span id="month-year"> {{ currentMonth }}</span></b>
        <button @click="nextMonth" id="next-month" class="btn btn-link"><i class="bi bi-caret-right"></i></button>
    </div>
    <table>
        <thead>
        <tr>
            <th v-for="day in days" :key="day">{{ day }}</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="week in weeks" :key="week">
            <td v-for="day in week" :key="day">{{ day }}</td>
        </tr>
        </tbody>
    </table>
    </div>
</div>
</template>

<script>
export default {
data() {
    return {
    currentDate: new Date(),
    days: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
    weeks: [],
    };
},
computed: {
    currentMonth() {
    return this.currentDate.toLocaleString('default', { month: 'long', year: 'numeric' });
    },
},
created() {
    this.updateCalendar();
},
mounted() {
    this.updateCalendar();
},
methods: {
    updateCalendar() {
    const firstDay = new Date(this.currentDate.getFullYear(), this.currentDate.getMonth(), 1).getDay();
    const daysInMonth = new Date(this.currentDate.getFullYear(), this.currentDate.getMonth() + 1, 0).getDate();
    const weeks = [[]];
    let weekIndex = 0;
    for (let i = 0; i < firstDay; i++) {
        weeks[weekIndex].push('');
    }
    for (let day = 1; day <= daysInMonth; day++) {
        if (weeks[weekIndex].length === 7) {
        weekIndex++;
        weeks.push([]);
        }
        weeks[weekIndex].push(day);
    }
    this.weeks = weeks;
    },
    previousMonth() {
    this.currentDate = new Date(this.currentDate.getFullYear(), this.currentDate.getMonth() - 1, 1);
    this.updateCalendar();
    },
    nextMonth() {
    this.currentDate = new Date(this.currentDate.getFullYear(), this.currentDate.getMonth() + 1, 1);
    this.updateCalendar();
    },
},
};
</script>

<style scoped>

</style>
