<select name="{{ $field ?? 'channel_tim'}}" id="channel_tim">
    @foreach ($channels as $channel)
    <option value="{{$channel->id}}">{{$channel->name}}</option>
    @endforeach
</select>