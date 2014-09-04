json.array!(@teachers) do |teacher|
  json.extract! teacher, :id, :name, :surname, :title
  json.url teacher_url(teacher, format: :json)
end
