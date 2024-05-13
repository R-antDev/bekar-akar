<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="post" action="/jobs">
        <x-forms.input label="Title" name="title" placeholder="CEO"/>
        <x-forms.input label="Salary" name="salary" placeholder="$90,000 BDT"/>

        <x-forms.input label="Location" name="location" placeholder="Dhaka, Bangladesh"/>

        <x-forms.select label="Schedule" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL" name="url" placeholder="https://example.com"/>
        <x-forms.checkbox label="Featured (Costs Extra)" name="featured"/>

        <x-forms.divider/>

        <x-forms.input label="Tags(comma separated)" name="tags" placeholder="PHP, Laravel"/>

        <x-forms.button>
            Publish
        </x-forms.button>

    </x-forms.form>
</x-layout>
