<ul class="flex md:mx-32 p-5 justify-center items-center list-group bg-linear-to-br from-yellow-100 via-yellow-100 via-10% to-pink-300 rounded-xl">
   <livewire:idea-item
            :key="$idea['id'] . $idea['title'] . $idea['text'] . count($idea->likes)"
            :ideaId="$idea['id']" :ideaTitle="$idea['title']" :ideaText="$idea['text']"
            :numLikes="count($idea->likes)" :numComments="count($idea->comments)"
            :username="$idea->user->username" :userId="$idea->user_id"
            :createDate="$idea['created_at']" :editDate="$idea['updated_at']"
            :userLiked="$idea->likes->where('user_id', Auth::id())->first()"
            @refresh="refresh"

    />
</ul>
