<x-layouts.app :title="__('Dashboard')">
    <div class="flex items-center justify-center w-full">
        <main class="lg:max-w-6xl">
            <livewire:idea-item :key="1"
            :idea='[
            "ideaId" => 1,
            "username" => "Fred Johnson",
            "date" => "January 15, 2025",
            "title" => "This is the Title",
            "body" => "This is hardcoded content in the controller. To be replaced by comment text. The header of this comment card is hardcoded with the initials of the use - update with initials of user that created comment.This is hardcoded content in the controller. To be replaced by comment text. The header of this comment card is hardcoded with the initials of the use - update with initials of user that created comment.This is hardcoded content in the controller. To be replaced by comment text. The header of this comment card is hardcoded with the initials of the use - update with initials of user that created comment.This is hardcoded content in the controller. To be replaced by comment text. The header of this comment card is hardcoded with the initials of the use - update with initials of user that created comment.",
            "numLikes" => 5000,
            "numComments" => 15
            ]'
            :border='true'
            :singleIdea='true'
            />
           
            <livewire:comment-section />
        </main>
    </div>

</x-layouts.app>
